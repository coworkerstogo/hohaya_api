<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231228213909 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE biens_immobiliers ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE biens_immobiliers ADD CONSTRAINT FK_ED62A1E0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_ED62A1E0A76ED395 ON biens_immobiliers (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE biens_immobiliers DROP FOREIGN KEY FK_ED62A1E0A76ED395');
        $this->addSql('DROP INDEX IDX_ED62A1E0A76ED395 ON biens_immobiliers');
        $this->addSql('ALTER TABLE biens_immobiliers DROP user_id');
    }
}
