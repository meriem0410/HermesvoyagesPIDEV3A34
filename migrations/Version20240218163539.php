<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240218163539 extends AbstractMigration
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
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hebergement_user DROP FOREIGN KEY FK_47E632D423BB0F66');
        $this->addSql('ALTER TABLE hebergement_user DROP FOREIGN KEY FK_47E632D4A76ED395');
        $this->addSql('DROP TABLE hebergement_user');
    }
}
