<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;


#[Route('/evenement')]
class EvenementController extends AbstractController
{



        
    #[Route('/pdf', name: 'app_pdf')]
    public function pdf(Request $request,EvenementRepository $EvenementRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
    
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
    
        $restaurants = $EvenementRepository->findAll();
    
        foreach ($restaurants as $restaurant) {
            $pathToImage = 'C:/Users/User/Downloads/HermesvoyagesPIDEV3A34-main/public/'. $restaurant->getImage();
            $imageData = base64_encode(file_get_contents($pathToImage));
            $restaurant->setImage($imageData); // Set the image data back to the restaurant object
        }
    
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('evenement/pdf.html.twig', [
            'title' => "Welcome to our PDF Test",
            'restaurants' => $restaurants,
            'imageData' => $imageData, // Pass imageData to the view
        ]);
    
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
    
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A3', 'portrait');
    
        // Render the HTML as PDF
        $dompdf->render();
    
        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
    





    #[Route('/statmohamed', name: 'statmohamed', methods: ['GET'])]
    public function stat(EvenementRepository $EvenementRepository): Response
    {
        $nbrs[]=Array();

        $e1=$EvenementRepository->find_Nb_Rec_Par_Status("festival");
        $nbrs[]=$e1[0][1];
        $e2=$EvenementRepository->find_Nb_Rec_Par_Status("spectacle");
        $nbrs[]=$e2[0][1];
        $e3=$EvenementRepository->find_Nb_Rec_Par_Status("culturel");
        $nbrs[]=$e3[0][1];


        reset($nbrs);
        $key = key($nbrs);

        unset($nbrs[$key]);

        $nbrss=array_values($nbrs);

        return $this->render('evenement/stat.html.twig', [
            'nbr' => json_encode($nbrss),
        ]);
    }








    #[Route('/search', name: 'search', methods: ['GET'])]
    public function search(Request $request,NormalizerInterface $Normalizer,EvenementRepository $EvenementRepository ): Response
    {

        $requestString=$request->get('searchValue');
        $requestString2=$request->get('searchValue2');


        $evenements = $EvenementRepository->findProduitsBySujet($requestString,$requestString2);

        $jsoncontentc =$Normalizer->normalize($evenements,'json',['groups'=>'evenements']);
        $jsonc=json_encode($jsoncontentc);
        if(  $jsonc == "[]" )
        {
            return new Response(null);
        }
        else{  
            return new Response($jsonc);
        }

    }












    #[Route('/', name: 'app_evenement_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository, PaginatorInterface $paginator,Request $request): Response
    {

        $requestsql = $evenementRepository->deleterevenement();



        
        $donnees = $evenementRepository->findBy([],['id' => 'desc']);

        $evenements = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );

        

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }








    

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $file = $form->get('image')->getData();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e){

                // ... handle exception if something happ

            }
            $evenement->setImage( 'uploads/images/'.$fileName);




            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $file = $form->get('image')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e){

                // ... handle exception if something happ

            }
            $evenement->setImage( 'uploads/images/'.$fileName);

            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }



    #[Route('/front/office', name: 'app_evenement_eventfront', methods: ['GET'])]
    public function eventfront(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/front.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }


                                                                                                                                                                                                        


    #[Route('/detailfront/{id}', name: 'eventfrontdetail', methods: ['GET'])]
    public function detailfront(Evenement $evenement): Response
    {
        return $this->render('evenement/showfront.html.twig', [
            'evenement' => $evenement,
        ]);
    }






    
}
