<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240218204630 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE billet (id INT AUTO_INCREMENT NOT NULL, prix DOUBLE PRECISION NOT NULL, disponibilite TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, billet_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, datedebut DATE NOT NULL, datefin DATE NOT NULL, lieu VARCHAR(255) NOT NULL, INDEX IDX_B26681E44973C78 (billet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE excursion (id INT AUTO_INCREMENT NOT NULL, relation_id INT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, INDEX IDX_9B08E72F3256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE guide (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, num_tel INT NOT NULL, disponibilite TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hebergement (id INT AUTO_INCREMENT NOT NULL, adresse VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, maxguest INT NOT NULL, room INT NOT NULL, description VARCHAR(255) NOT NULL, amenitites VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hebergement_user (hebergement_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_47E632D423BB0F66 (hebergement_id), INDEX IDX_47E632D4A76ED395 (user_id), PRIMARY KEY(hebergement_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (id INT AUTO_INCREMENT NOT NULL, voyage_id INT NOT NULL, activite VARCHAR(255) NOT NULL, datedepart DATE NOT NULL, dateretour DATE NOT NULL, description VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_3DDCB9FF68C9E5AF (voyage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage (id INT AUTO_INCREMENT NOT NULL, destination VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, date DATE NOT NULL, type LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E44973C78 FOREIGN KEY (billet_id) REFERENCES billet (id)');
        $this->addSql('ALTER TABLE excursion ADD CONSTRAINT FK_9B08E72F3256915B FOREIGN KEY (relation_id) REFERENCES guide (id)');
        $this->addSql('ALTER TABLE hebergement_user ADD CONSTRAINT FK_47E632D423BB0F66 FOREIGN KEY (hebergement_id) REFERENCES hebergement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hebergement_user ADD CONSTRAINT FK_47E632D4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FF68C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E44973C78');
        $this->addSql('ALTER TABLE excursion DROP FOREIGN KEY FK_9B08E72F3256915B');
        $this->addSql('ALTER TABLE hebergement_user DROP FOREIGN KEY FK_47E632D423BB0F66');
        $this->addSql('ALTER TABLE hebergement_user DROP FOREIGN KEY FK_47E632D4A76ED395');
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FF68C9E5AF');
        $this->addSql('DROP TABLE billet');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE excursion');
        $this->addSql('DROP TABLE guide');
        $this->addSql('DROP TABLE hebergement');
        $this->addSql('DROP TABLE hebergement_user');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE voyage');
    }
}
