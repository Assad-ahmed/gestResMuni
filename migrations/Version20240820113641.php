<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240820113641 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, contributeur_id INT DEFAULT NULL, date DATETIME NOT NULL, montant NUMERIC(10, 0) NOT NULL, INDEX IDX_B1DC7A1EB903F8C2 (contributeur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, age VARCHAR(255) NOT NULL, est_eleve TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EB903F8C2 FOREIGN KEY (contributeur_id) REFERENCES contributeurs (id)');
        $this->addSql('ALTER TABLE impot_cfnpb DROP FOREIGN KEY FK_768593A318566CAF');
        $this->addSql('DROP INDEX fk_768593a318566caf ON impot_cfnpb');
        $this->addSql('CREATE INDEX IDX_768593A318566CAF ON impot_cfnpb (propriete_id)');
        $this->addSql('ALTER TABLE impot_cfnpb ADD CONSTRAINT FK_768593A318566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1EB903F8C2');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE personne');
        $this->addSql('ALTER TABLE impot_cfnpb DROP FOREIGN KEY FK_768593A318566CAF');
        $this->addSql('DROP INDEX idx_768593a318566caf ON impot_cfnpb');
        $this->addSql('CREATE INDEX FK_768593A318566CAF ON impot_cfnpb (propriete_id)');
        $this->addSql('ALTER TABLE impot_cfnpb ADD CONSTRAINT FK_768593A318566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
    }
}
