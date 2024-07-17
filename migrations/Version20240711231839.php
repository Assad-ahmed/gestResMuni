<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240711231839 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contribution_patente_site_collecte DROP FOREIGN KEY FK_AF79C24F9A24A576');
        $this->addSql('ALTER TABLE contribution_patente_site_collecte DROP FOREIGN KEY FK_AF79C24FF7202289');
        $this->addSql('ALTER TABLE impot_capitation_site_collecte DROP FOREIGN KEY FK_BF968AA79A24A576');
        $this->addSql('ALTER TABLE impot_capitation_site_collecte DROP FOREIGN KEY FK_BF968AA759502239');
        $this->addSql('DROP TABLE cfpb');
        $this->addSql('DROP TABLE cfpnb');
        $this->addSql('DROP TABLE contribution_patente');
        $this->addSql('DROP TABLE contribution_patente_site_collecte');
        $this->addSql('DROP TABLE impot_capitation');
        $this->addSql('DROP TABLE impot_capitation_site_collecte');
        $this->addSql('DROP TABLE taxe_indirecte');
        $this->addSql('DROP TABLE tom');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cfpb (id INT AUTO_INCREMENT NOT NULL, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, surface NUMERIC(12, 2) NOT NULL, valeur_locative NUMERIC(12, 3) NOT NULL, type_batiment VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_imposition DATETIME NOT NULL, deduction NUMERIC(12, 3) NOT NULL, revenu_net NUMERIC(12, 3) NOT NULL, taux NUMERIC(12, 3) NOT NULL, montant_taxe NUMERIC(12, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cfpnb (id INT AUTO_INCREMENT NOT NULL, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, surface NUMERIC(12, 2) NOT NULL, revenu_net NUMERIC(12, 3) NOT NULL, date DATETIME NOT NULL, type_terrain VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, taux NUMERIC(12, 2) NOT NULL, montant_taxe NUMERIC(12, 3) NOT NULL, valeur_venale NUMERIC(12, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE contribution_patente (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, montant_cumule_journalier NUMERIC(10, 3) NOT NULL, montant_cumule_mensuel NUMERIC(10, 3) NOT NULL, montant_cumule_annuel NUMERIC(10, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE contribution_patente_site_collecte (contribution_patente_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_AF79C24FF7202289 (contribution_patente_id), INDEX IDX_AF79C24F9A24A576 (site_collecte_id), PRIMARY KEY(contribution_patente_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE impot_capitation (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, montant_cumule_journalier NUMERIC(10, 3) NOT NULL, montant_cumule_mensuel NUMERIC(10, 3) NOT NULL, montant_cumule_annuel NUMERIC(10, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE impot_capitation_site_collecte (impot_capitation_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_BF968AA759502239 (impot_capitation_id), INDEX IDX_BF968AA79A24A576 (site_collecte_id), PRIMARY KEY(impot_capitation_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE taxe_indirecte (id INT AUTO_INCREMENT NOT NULL, type_taxe VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, code_article VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, montant_journalier NUMERIC(12, 3) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tom (id INT AUTO_INCREMENT NOT NULL, nom_p VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, region VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, valeur_locative NUMERIC(12, 3) NOT NULL, taux NUMERIC(12, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE contribution_patente_site_collecte ADD CONSTRAINT FK_AF79C24F9A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contribution_patente_site_collecte ADD CONSTRAINT FK_AF79C24FF7202289 FOREIGN KEY (contribution_patente_id) REFERENCES contribution_patente (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE impot_capitation_site_collecte ADD CONSTRAINT FK_BF968AA79A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE impot_capitation_site_collecte ADD CONSTRAINT FK_BF968AA759502239 FOREIGN KEY (impot_capitation_id) REFERENCES impot_capitation (id) ON DELETE CASCADE');
    }
}
