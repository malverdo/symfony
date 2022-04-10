<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220410093847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE group_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE user_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "group" (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE users_groups (user_id INT NOT NULL, group_id INT NOT NULL, PRIMARY KEY(user_id, group_id))');
        $this->addSql('CREATE INDEX IDX_FF8AB7E0A76ED395 ON users_groups (user_id)');
        $this->addSql('CREATE INDEX IDX_FF8AB7E0FE54D947 ON users_groups (group_id)');
        $this->addSql('ALTER TABLE users_groups ADD CONSTRAINT FK_FF8AB7E0A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users_groups ADD CONSTRAINT FK_FF8AB7E0FE54D947 FOREIGN KEY (group_id) REFERENCES "group" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE users_groups DROP CONSTRAINT FK_FF8AB7E0FE54D947');
        $this->addSql('ALTER TABLE users_groups DROP CONSTRAINT FK_FF8AB7E0A76ED395');
        $this->addSql('DROP SEQUENCE group_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE user_id_seq CASCADE');
        $this->addSql('DROP TABLE "group"');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE users_groups');
    }
}
