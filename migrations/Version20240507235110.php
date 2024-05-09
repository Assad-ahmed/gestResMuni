<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240507235110 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contribution_patente (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, date DATETIME NOT NULL, montant_cumule_journalier NUMERIC(10, 3) NOT NULL, montant_cumule_mensuel NUMERIC(10, 3) NOT NULL, montant_cumule_annuel NUMERIC(10, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contribution_patente_site_collecte (contribution_patente_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_AF79C24FF7202289 (contribution_patente_id), INDEX IDX_AF79C24F9A24A576 (site_collecte_id), PRIMARY KEY(contribution_patente_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contribution_patente_site_collecte ADD CONSTRAINT FK_AF79C24FF7202289 FOREIGN KEY (contribution_patente_id) REFERENCES contribution_patente (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contribution_patente_site_collecte ADD CONSTRAINT FK_AF79C24F9A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contribution_patente_site_collecte DROP FOREIGN KEY FK_AF79C24FF7202289');
        $this->addSql('ALTER TABLE contribution_patente_site_collecte DROP FOREIGN KEY FK_AF79C24F9A24A576');
        $this->addSql('DROP TABLE contribution_patente');
        $this->addSql('DROP TABLE contribution_patente_site_collecte');
    }
}
