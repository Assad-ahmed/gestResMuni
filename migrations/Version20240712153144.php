<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240712153144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tax_detail (id INT AUTO_INCREMENT NOT NULL, tax_id INT DEFAULT NULL, montant NUMERIC(10, 3) NOT NULL, date DATETIME NOT NULL, UNIQUE INDEX UNIQ_62DC1538B2A824D8 (tax_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tax_detail ADD CONSTRAINT FK_62DC1538B2A824D8 FOREIGN KEY (tax_id) REFERENCES tax (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tax_detail DROP FOREIGN KEY FK_62DC1538B2A824D8');
        $this->addSql('DROP TABLE tax_detail');
    }
}
