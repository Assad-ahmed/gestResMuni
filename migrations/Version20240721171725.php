<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240721171725 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE excedent_site_collecte DROP FOREIGN KEY FK_A02682FF2EE0499E');
        $this->addSql('ALTER TABLE excedent_site_collecte DROP FOREIGN KEY FK_A02682FF9A24A576');
        $this->addSql('ALTER TABLE recette_non_fiscale_site_collecte DROP FOREIGN KEY FK_D8BBB24C9A24A576');
        $this->addSql('ALTER TABLE recette_non_fiscale_site_collecte DROP FOREIGN KEY FK_D8BBB24CE04186E1');
        $this->addSql('ALTER TABLE ristourne_site_collecte DROP FOREIGN KEY FK_5D5634699A24A576');
        $this->addSql('ALTER TABLE ristourne_site_collecte DROP FOREIGN KEY FK_5D5634696A87EE95');
        $this->addSql('DROP TABLE excedent');
        $this->addSql('DROP TABLE excedent_site_collecte');
        $this->addSql('DROP TABLE recette_non_fiscale');
        $this->addSql('DROP TABLE recette_non_fiscale_site_collecte');
        $this->addSql('DROP TABLE ristourne');
        $this->addSql('DROP TABLE ristourne_site_collecte');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE excedent (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, montant_journalier NUMERIC(10, 3) NOT NULL, montant_mensuel NUMERIC(10, 3) NOT NULL, montant_annuel NUMERIC(10, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE excedent_site_collecte (excedent_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_A02682FF2EE0499E (excedent_id), INDEX IDX_A02682FF9A24A576 (site_collecte_id), PRIMARY KEY(excedent_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE recette_non_fiscale (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, montant_journalier NUMERIC(10, 3) NOT NULL, montant_mensuel NUMERIC(10, 3) NOT NULL, montant_annuel NUMERIC(10, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE recette_non_fiscale_site_collecte (recette_non_fiscale_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_D8BBB24CE04186E1 (recette_non_fiscale_id), INDEX IDX_D8BBB24C9A24A576 (site_collecte_id), PRIMARY KEY(recette_non_fiscale_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ristourne (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATETIME NOT NULL, montant_journalier NUMERIC(10, 3) NOT NULL, montant_mensuel NUMERIC(10, 3) NOT NULL, montant_annuel NUMERIC(10, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ristourne_site_collecte (ristourne_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_5D5634696A87EE95 (ristourne_id), INDEX IDX_5D5634699A24A576 (site_collecte_id), PRIMARY KEY(ristourne_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE excedent_site_collecte ADD CONSTRAINT FK_A02682FF2EE0499E FOREIGN KEY (excedent_id) REFERENCES excedent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE excedent_site_collecte ADD CONSTRAINT FK_A02682FF9A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recette_non_fiscale_site_collecte ADD CONSTRAINT FK_D8BBB24C9A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recette_non_fiscale_site_collecte ADD CONSTRAINT FK_D8BBB24CE04186E1 FOREIGN KEY (recette_non_fiscale_id) REFERENCES recette_non_fiscale (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ristourne_site_collecte ADD CONSTRAINT FK_5D5634699A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ristourne_site_collecte ADD CONSTRAINT FK_5D5634696A87EE95 FOREIGN KEY (ristourne_id) REFERENCES ristourne (id) ON DELETE CASCADE');
    }
}
