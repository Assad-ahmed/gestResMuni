<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240721043612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE excedents (id INT AUTO_INCREMENT NOT NULL, propriete_id INT DEFAULT NULL, type_recette VARCHAR(255) NOT NULL, montant NUMERIC(10, 3) NOT NULL, date DATETIME NOT NULL, INDEX IDX_CD733E1318566CAF (propriete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE excedents ADD CONSTRAINT FK_CD733E1318566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE excedents DROP FOREIGN KEY FK_CD733E1318566CAF');
        $this->addSql('DROP TABLE excedents');
    }
}
