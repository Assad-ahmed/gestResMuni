<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240515114308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cfpb ADD deduction NUMERIC(12, 3) NOT NULL, ADD revenu_net NUMERIC(12, 3) NOT NULL, ADD taux NUMERIC(12, 3) NOT NULL, ADD montant_taxe NUMERIC(12, 3) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cfpb DROP deduction, DROP revenu_net, DROP taux, DROP montant_taxe');
    }
}
