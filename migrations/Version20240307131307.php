<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240307131307 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE recette_non_fiscale_site_collecte (recette_non_fiscale_id INT NOT NULL, site_collecte_id INT NOT NULL, INDEX IDX_D8BBB24CE04186E1 (recette_non_fiscale_id), INDEX IDX_D8BBB24C9A24A576 (site_collecte_id), PRIMARY KEY(recette_non_fiscale_id, site_collecte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE recette_non_fiscale_site_collecte ADD CONSTRAINT FK_D8BBB24CE04186E1 FOREIGN KEY (recette_non_fiscale_id) REFERENCES recette_non_fiscale (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recette_non_fiscale_site_collecte ADD CONSTRAINT FK_D8BBB24C9A24A576 FOREIGN KEY (site_collecte_id) REFERENCES site_collecte (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recette_non_fiscale_site_collecte DROP FOREIGN KEY FK_D8BBB24CE04186E1');
        $this->addSql('ALTER TABLE recette_non_fiscale_site_collecte DROP FOREIGN KEY FK_D8BBB24C9A24A576');
        $this->addSql('DROP TABLE recette_non_fiscale_site_collecte');
    }
}
