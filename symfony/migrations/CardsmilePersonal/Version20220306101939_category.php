<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306101939_category extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Version20220306101939_category';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE category (
                              id SERIAL PRIMARY KEY,
                              customer_id INT NOT NULL,
                              title TEXT NOT NULL,
                              content TEXT NOT NULL,
                              CONSTRAINT fk_customer FOREIGN KEY(customer_id) REFERENCES customer(id)
                            )');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
