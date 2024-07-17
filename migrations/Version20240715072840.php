<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240715072840 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE impot_cfpb (id INT AUTO_INCREMENT NOT NULL, type_batimen VARCHAR(255) NOT NULL, valeur_locative NUMERIC(10, 0) NOT NULL, revenu_net NUMERIC(10, 0) NOT NULL, date DATETIME NOT NULL, montant NUMERIC(10, 0) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tax CHANGE montant montant NUMERIC(10, 3) NOT NULL, CHANGE valeur_venale valeur_venale NUMERIC(10, 3) NOT NULL, CHANGE valeur_locative valeur_locative NUMERIC(10, 3) NOT NULL, CHANGE type_batiment type_batiment VARCHAR(255) NOT NULL, CHANGE region region VARCHAR(255) NOT NULL, CHANGE revenu_net revenu_net NUMERIC(10, 3) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE impot_cfpb');
        $this->addSql('ALTER TABLE tax CHANGE montant montant NUMERIC(10, 3) DEFAULT NULL, CHANGE valeur_venale valeur_venale NUMERIC(10, 3) DEFAULT NULL, CHANGE valeur_locative valeur_locative NUMERIC(10, 3) DEFAULT NULL, CHANGE type_batiment type_batiment VARCHAR(255) DEFAULT NULL, CHANGE region region VARCHAR(255) DEFAULT NULL, CHANGE revenu_net revenu_net NUMERIC(10, 3) DEFAULT NULL');
    }
}
