<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231130135452 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE biens_immobiliers (id INT AUTO_INCREMENT NOT NULL, id_get_man_id INT DEFAULT NULL, ville VARCHAR(255) NOT NULL, quartier VARCHAR(255) NOT NULL, nb_chambre INT NOT NULL, nb_salle_de_baim INT DEFAULT NULL, superficie VARCHAR(255) DEFAULT NULL, description LONGTEXT NOT NULL, prix INT NOT NULL, nb_co_locataire INT DEFAULT NULL, proprio_existe VARCHAR(255) DEFAULT NULL, caution INT NOT NULL, avance INT NOT NULL, post_date DATETIME NOT NULL, etat VARCHAR(255) NOT NULL, get_at DATETIME DEFAULT NULL, INDEX IDX_ED62A1E0CC89EB1C (id_get_man_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, avatar LONGTEXT DEFAULT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE biens_immobiliers ADD CONSTRAINT FK_ED62A1E0CC89EB1C FOREIGN KEY (id_get_man_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE biens_immobiliers DROP FOREIGN KEY FK_ED62A1E0CC89EB1C');
        $this->addSql('DROP TABLE biens_immobiliers');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE users');
    }
}
