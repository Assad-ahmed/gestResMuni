<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240306102324 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE recettefiscale (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, montant_cumule_jour NUMERIC(10, 3) NOT NULL, montant_cumule_moi NUMERIC(10, 3) NOT NULL, montant_cumule_annee NUMERIC(10, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE type_imp ADD recettefiscale_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type_imp ADD CONSTRAINT FK_3A06AB8AA3EA79C6 FOREIGN KEY (recettefiscale_id) REFERENCES recettefiscale (id)');
        $this->addSql('CREATE INDEX IDX_3A06AB8AA3EA79C6 ON type_imp (recettefiscale_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE type_imp DROP FOREIGN KEY FK_3A06AB8AA3EA79C6');
        $this->addSql('DROP TABLE recettefiscale');
        $this->addSql('DROP INDEX IDX_3A06AB8AA3EA79C6 ON type_imp');
        $this->addSql('ALTER TABLE type_imp DROP recettefiscale_id');
    }
}
