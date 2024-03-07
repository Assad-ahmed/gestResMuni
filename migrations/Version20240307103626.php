<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240307103626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE recettefiscale_site_collecte (recettefiscale_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_57B82633A3EA79C6 (recettefiscale_id), INDEX IDX_57B826339A24A576 (site_collecte_id), PRIMARY KEY(recettefiscale_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE recettefiscale_site_collecte ADD CONSTRAINT FK_57B82633A3EA79C6 FOREIGN KEY (recettefiscale_id) REFERENCES recettefiscale (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recettefiscale_site_collecte ADD CONSTRAINT FK_57B826339A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recettefiscale_site_collecte DROP FOREIGN KEY FK_57B82633A3EA79C6');
        $this->addSql('ALTER TABLE recettefiscale_site_collecte DROP FOREIGN KEY FK_57B826339A24A576');
        $this->addSql('DROP TABLE recettefiscale_site_collecte');
    }
}
