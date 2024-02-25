<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240225200319 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE res ADD pays_id INT NOT NULL, DROP voyage_id, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE res ADD CONSTRAINT FK_79B2DA48A6E44244 FOREIGN KEY (pays_id) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE res ADD CONSTRAINT FK_79B2DA48A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_79B2DA48A6E44244 ON res (pays_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_79B2DA48A76ED395 ON res (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE res DROP FOREIGN KEY FK_79B2DA48A6E44244');
        $this->addSql('ALTER TABLE res DROP FOREIGN KEY FK_79B2DA48A76ED395');
        $this->addSql('DROP INDEX UNIQ_79B2DA48A6E44244 ON res');
        $this->addSql('DROP INDEX UNIQ_79B2DA48A76ED395 ON res');
        $this->addSql('ALTER TABLE res ADD voyage_id VARCHAR(255) NOT NULL, DROP pays_id, CHANGE user_id user_id VARCHAR(255) NOT NULL');
    }
}
