<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240722063027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE patente (id INT AUTO_INCREMENT NOT NULL, propriete_id INT DEFAULT NULL, droit_fixe INT NOT NULL, droit_proportionnel DOUBLE PRECISION NOT NULL, tau_valeur_locative DOUBLE PRECISION NOT NULL, montant DOUBLE PRECISION NOT NULL, date DATETIME NOT NULL, INDEX IDX_86C45D9B18566CAF (propriete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE patente ADD CONSTRAINT FK_86C45D9B18566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patente DROP FOREIGN KEY FK_86C45D9B18566CAF');
        $this->addSql('DROP TABLE patente');
    }
}
