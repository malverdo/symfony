<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306134936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE user_card_id_seq CASCADE');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE user_card');
        $this->addSql('ALTER TABLE category DROP CONSTRAINT fk_customer');
        $this->addSql('ALTER TABLE category DROP customer_id');
        $this->addSql('ALTER TABLE category ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE customer ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE customer ALTER name SET NOT NULL');
        $this->addSql('ALTER TABLE customer ALTER name TYPE VARCHAR(16)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE user_card_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, role INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE user_card (id SERIAL NOT NULL, name VARCHAR(255) DEFAULT NULL, role INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE SEQUENCE customer_id_seq');
        $this->addSql('SELECT setval(\'customer_id_seq\', (SELECT MAX(id) FROM customer))');
        $this->addSql('ALTER TABLE customer ALTER id SET DEFAULT nextval(\'customer_id_seq\')');
        $this->addSql('ALTER TABLE customer ALTER name DROP NOT NULL');
        $this->addSql('ALTER TABLE customer ALTER name TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE category ADD customer_id INT NOT NULL');
        $this->addSql('CREATE SEQUENCE category_id_seq');
        $this->addSql('SELECT setval(\'category_id_seq\', (SELECT MAX(id) FROM category))');
        $this->addSql('ALTER TABLE category ALTER id SET DEFAULT nextval(\'category_id_seq\')');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT fk_customer FOREIGN KEY (customer_id) REFERENCES customer (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_64C19C19395C3F3 ON category (customer_id)');
    }
}
