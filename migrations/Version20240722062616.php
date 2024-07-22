<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240722062616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pentente DROP FOREIGN KEY FK_166ACDA018566CAF');
        $this->addSql('DROP TABLE pentente');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pentente (id INT AUTO_INCREMENT NOT NULL, propriete_id INT DEFAULT NULL, droit_fixe INT NOT NULL, droit_proportionnel DOUBLE PRECISION NOT NULL, taux_valeur_locative DOUBLE PRECISION NOT NULL, montant DOUBLE PRECISION NOT NULL, INDEX IDX_166ACDA018566CAF (propriete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pentente ADD CONSTRAINT FK_166ACDA018566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
    }
}
