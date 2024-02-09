<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209120345 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE controlleur_centrale (id INT AUTO_INCREMENT NOT NULL, nom_controlleur VARCHAR(255) NOT NULL, prenom_controlleur VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE maire (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recette_fiscale (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, montant_cumule_journalier NUMERIC(30, 3) NOT NULL, montant_cumule_mensuel NUMERIC(30, 3) NOT NULL, montant_cumule_annuel NUMERIC(30, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_impot (id INT AUTO_INCREMENT NOT NULL, nomtype VARCHAR(255) NOT NULL, montant_cumule_jour NUMERIC(30, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE controlleur_centrale');
        $this->addSql('DROP TABLE maire');
        $this->addSql('DROP TABLE recette_fiscale');
        $this->addSql('DROP TABLE type_impot');
    }
}
