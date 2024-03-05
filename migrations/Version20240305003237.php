<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240305003237 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hebergement_user (hebergement_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_47E632D423BB0F66 (hebergement_id), INDEX IDX_47E632D4A76ED395 (user_id), PRIMARY KEY(hebergement_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hebergement_user ADD CONSTRAINT FK_47E632D423BB0F66 FOREIGN KEY (hebergement_id) REFERENCES hebergement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hebergement_user ADD CONSTRAINT FK_47E632D4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF023BB0F66');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0A76ED395');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495523BB0F66');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('ALTER TABLE hebergement ADD amenitites VARCHAR(255) NOT NULL, DROP amenities, DROP image');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, hebergement_id INT NOT NULL, user_id INT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, commentaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, rating INT NOT NULL, INDEX IDX_8F91ABF023BB0F66 (hebergement_id), INDEX IDX_8F91ABF0A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, hebergement_id INT NOT NULL, checkin DATE NOT NULL, checkout DATE NOT NULL, nbguest INT NOT NULL, INDEX IDX_42C84955A76ED395 (user_id), INDEX IDX_42C8495523BB0F66 (hebergement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF023BB0F66 FOREIGN KEY (hebergement_id) REFERENCES hebergement (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495523BB0F66 FOREIGN KEY (hebergement_id) REFERENCES hebergement (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE hebergement_user DROP FOREIGN KEY FK_47E632D423BB0F66');
        $this->addSql('ALTER TABLE hebergement_user DROP FOREIGN KEY FK_47E632D4A76ED395');
        $this->addSql('DROP TABLE hebergement_user');
        $this->addSql('ALTER TABLE hebergement ADD amenities JSON NOT NULL COMMENT \'(DC2Type:json)\', ADD image VARCHAR(255) DEFAULT NULL, DROP amenitites');
    }
}
