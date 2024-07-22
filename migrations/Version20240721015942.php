<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240721015942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tax_indirecte ADD propriete_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tax_indirecte ADD CONSTRAINT FK_1C63455418566CAF FOREIGN KEY (propriete_id) REFERENCES propriete (id)');
        $this->addSql('CREATE INDEX IDX_1C63455418566CAF ON tax_indirecte (propriete_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tax_indirecte DROP FOREIGN KEY FK_1C63455418566CAF');
        $this->addSql('DROP INDEX IDX_1C63455418566CAF ON tax_indirecte');
        $this->addSql('ALTER TABLE tax_indirecte DROP propriete_id');
    }
}
