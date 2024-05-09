<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240507072458 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE impot_assis_site_collecte DROP FOREIGN KEY FK_FE561DED9A24A576');
        $this->addSql('ALTER TABLE impot_assis_site_collecte DROP FOREIGN KEY FK_FE561DED371FE851');
        $this->addSql('DROP TABLE impot_assis');
        $this->addSql('DROP TABLE impot_assis_site_collecte');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE impot_assis (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, montant_cumule_jour NUMERIC(10, 3) NOT NULL, montant_cumule_moi NUMERIC(10, 3) NOT NULL, montant_cumule_annee NUMERIC(10, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE impot_assis_site_collecte (impot_assis_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_FE561DED9A24A576 (site_collecte_id), INDEX IDX_FE561DED371FE851 (impot_assis_id), PRIMARY KEY(impot_assis_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE impot_assis_site_collecte ADD CONSTRAINT FK_FE561DED9A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE impot_assis_site_collecte ADD CONSTRAINT FK_FE561DED371FE851 FOREIGN KEY (impot_assis_id) REFERENCES impot_assis (id) ON DELETE CASCADE');
    }
}
