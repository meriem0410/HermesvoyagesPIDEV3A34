<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240226223540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE voypersonalise (id INT AUTO_INCREMENT NOT NULL, destination VARCHAR(255) NOT NULL, saison VARCHAR(255) NOT NULL, date DATE NOT NULL, email VARCHAR(255) NOT NULL, act VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE res ADD CONSTRAINT FK_79B2DA48A6E44244 FOREIGN KEY (pays_id) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE res ADD CONSTRAINT FK_79B2DA48A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_79B2DA48A6E44244 ON res (pays_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_79B2DA48A76ED395 ON res (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE voypersonalise');
        $this->addSql('ALTER TABLE res DROP FOREIGN KEY FK_79B2DA48A6E44244');
        $this->addSql('ALTER TABLE res DROP FOREIGN KEY FK_79B2DA48A76ED395');
        $this->addSql('DROP INDEX UNIQ_79B2DA48A6E44244 ON res');
        $this->addSql('DROP INDEX UNIQ_79B2DA48A76ED395 ON res');
    }
}
