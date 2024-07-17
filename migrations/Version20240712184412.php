<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240712184412 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ressource (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax_detail (id INT AUTO_INCREMENT NOT NULL, taxtyp_id INT DEFAULT NULL, montant NUMERIC(10, 3) NOT NULL, date DATETIME NOT NULL, INDEX IDX_62DC15381ECEC9C9 (taxtyp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax_type (id INT AUTO_INCREMENT NOT NULL, ressource_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_905158D1FC6CD52A (ressource_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tax_detail ADD CONSTRAINT FK_62DC15381ECEC9C9 FOREIGN KEY (taxtyp_id) REFERENCES tax_type (id)');
        $this->addSql('ALTER TABLE tax_type ADD CONSTRAINT FK_905158D1FC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tax_detail DROP FOREIGN KEY FK_62DC15381ECEC9C9');
        $this->addSql('ALTER TABLE tax_type DROP FOREIGN KEY FK_905158D1FC6CD52A');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE tax_detail');
        $this->addSql('DROP TABLE tax_type');
    }
}
