<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240715002439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tax_detail DROP FOREIGN KEY FK_62DC15381ECEC9C9');
        $this->addSql('CREATE TABLE tax (id INT AUTO_INCREMENT NOT NULL, montant NUMERIC(10, 3) NOT NULL, date DATETIME NOT NULL, category VARCHAR(255) NOT NULL, valeur_venale NUMERIC(10, 3) NOT NULL, valeur_locative NUMERIC(10, 3) NOT NULL, type_batiment VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, revenu_net NUMERIC(10, 3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tax_type DROP FOREIGN KEY FK_905158D1FC6CD52A');
        $this->addSql('DROP TABLE tax_type');
        $this->addSql('DROP INDEX IDX_62DC15381ECEC9C9 ON tax_detail');
        $this->addSql('ALTER TABLE tax_detail DROP taxtyp_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tax_type (id INT AUTO_INCREMENT NOT NULL, ressource_id INT DEFAULT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_905158D1FC6CD52A (ressource_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE tax_type ADD CONSTRAINT FK_905158D1FC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id)');
        $this->addSql('DROP TABLE tax');
        $this->addSql('ALTER TABLE tax_detail ADD taxtyp_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tax_detail ADD CONSTRAINT FK_62DC15381ECEC9C9 FOREIGN KEY (taxtyp_id) REFERENCES tax_type (id)');
        $this->addSql('CREATE INDEX IDX_62DC15381ECEC9C9 ON tax_detail (taxtyp_id)');
    }
}
