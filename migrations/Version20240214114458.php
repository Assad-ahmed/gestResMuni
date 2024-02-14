<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240214114458 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE recette_fiscale_type_impot (recette_fiscale_id INT NOT NULL, type_impot_id INT NOT NULL, INDEX IDX_9121CAAE21CF8FCC (recette_fiscale_id), INDEX IDX_9121CAAEE005A894 (type_impot_id), PRIMARY KEY(recette_fiscale_id, type_impot_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site_ressourcepropre (site_id INT NOT NULL, ressourcepropre_id INT NOT NULL, INDEX IDX_3EA1A898F6BD1646 (site_id), INDEX IDX_3EA1A898F898245D (ressourcepropre_id), PRIMARY KEY(site_id, ressourcepropre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site_contributeur (site_id INT NOT NULL, contributeur_id INT NOT NULL, INDEX IDX_8C89DC56F6BD1646 (site_id), INDEX IDX_8C89DC56B903F8C2 (contributeur_id), PRIMARY KEY(site_id, contributeur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site_agent (site_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_E2D14C98F6BD1646 (site_id), INDEX IDX_E2D14C983414710B (agent_id), PRIMARY KEY(site_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE recette_fiscale_type_impot ADD CONSTRAINT FK_9121CAAE21CF8FCC FOREIGN KEY (recette_fiscale_id) REFERENCES recette_fiscale (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recette_fiscale_type_impot ADD CONSTRAINT FK_9121CAAEE005A894 FOREIGN KEY (type_impot_id) REFERENCES type_impot (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE site_ressourcepropre ADD CONSTRAINT FK_3EA1A898F6BD1646 FOREIGN KEY (site_id) REFERENCES site (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE site_ressourcepropre ADD CONSTRAINT FK_3EA1A898F898245D FOREIGN KEY (ressourcepropre_id) REFERENCES ressourcepropre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE site_contributeur ADD CONSTRAINT FK_8C89DC56F6BD1646 FOREIGN KEY (site_id) REFERENCES site (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE site_contributeur ADD CONSTRAINT FK_8C89DC56B903F8C2 FOREIGN KEY (contributeur_id) REFERENCES contributeur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE site_agent ADD CONSTRAINT FK_E2D14C98F6BD1646 FOREIGN KEY (site_id) REFERENCES site (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE site_agent ADD CONSTRAINT FK_E2D14C983414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agent ADD controlleur_centrale_id INT DEFAULT NULL, ADD maire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D71AC9383 FOREIGN KEY (controlleur_centrale_id) REFERENCES controlleur_centrale (id)');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D3A1CDB7C FOREIGN KEY (maire_id) REFERENCES maire (id)');
        $this->addSql('CREATE INDEX IDX_268B9C9D71AC9383 ON agent (controlleur_centrale_id)');
        $this->addSql('CREATE INDEX IDX_268B9C9D3A1CDB7C ON agent (maire_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recette_fiscale_type_impot DROP FOREIGN KEY FK_9121CAAE21CF8FCC');
        $this->addSql('ALTER TABLE recette_fiscale_type_impot DROP FOREIGN KEY FK_9121CAAEE005A894');
        $this->addSql('ALTER TABLE site_ressourcepropre DROP FOREIGN KEY FK_3EA1A898F6BD1646');
        $this->addSql('ALTER TABLE site_ressourcepropre DROP FOREIGN KEY FK_3EA1A898F898245D');
        $this->addSql('ALTER TABLE site_contributeur DROP FOREIGN KEY FK_8C89DC56F6BD1646');
        $this->addSql('ALTER TABLE site_contributeur DROP FOREIGN KEY FK_8C89DC56B903F8C2');
        $this->addSql('ALTER TABLE site_agent DROP FOREIGN KEY FK_E2D14C98F6BD1646');
        $this->addSql('ALTER TABLE site_agent DROP FOREIGN KEY FK_E2D14C983414710B');
        $this->addSql('DROP TABLE recette_fiscale_type_impot');
        $this->addSql('DROP TABLE site_ressourcepropre');
        $this->addSql('DROP TABLE site_contributeur');
        $this->addSql('DROP TABLE site_agent');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9D71AC9383');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9D3A1CDB7C');
        $this->addSql('DROP INDEX IDX_268B9C9D71AC9383 ON agent');
        $this->addSql('DROP INDEX IDX_268B9C9D3A1CDB7C ON agent');
        $this->addSql('ALTER TABLE agent DROP controlleur_centrale_id, DROP maire_id');
    }
}
