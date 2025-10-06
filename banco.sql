CREATE DATABASE IF NOT EXISTS `exercicios_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE `exercicios_db`;

CREATE TABLE `alunos_ac` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(255) NOT NULL,
  `matricula` VARCHAR(50) NOT NULL UNIQUE,
  `curso` VARCHAR(100),
  `email` VARCHAR(100),
  `telefone` VARCHAR(20),
  `endereco` VARCHAR(255),
  `cep` VARCHAR(10),
  `cidade` VARCHAR(100),
  `uf` VARCHAR(2),
  `curso_horas` VARCHAR(255),
  `carga_horaria` INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `alunos_ac` (`nome`, `matricula`, `curso`, `email`, `telefone`, `endereco`, `cep`, `cidade`, `uf`, `curso_horas`, `carga_horaria`) VALUES
('Ana Silva', '2025001', 'Análise e Des. de Sistemas', 'ana.silva@email.com', '4899991111', 'Rua das Flores, 123', '88100-001', 'São José', 'SC', 'Curso de Python', 40),
('Bruno Costa', '2025002', 'Análise e Des. de Sistemas', 'bruno.costa@email.com', '4899992222', 'Avenida Central, 456', '88100-002', 'Palhoça', 'SC', 'Workshop de UX', 10),
('Carlos Dias', '2025003', 'Engenharia de Software', 'carlos.dias@email.com', '4899993333', 'Rua Larga, 789', '88100-003', 'Florianópolis', 'SC', 'Palestra de IA', 5),
('Daniela Souza', '2025004', 'Ciência da Computação', 'daniela.souza@email.com', '4899994444', 'Travessa Curta, 101', '88100-004', 'Biguaçu', 'SC', 'Seminário de Redes', 15),
('Eduardo Lima', '2025005', 'Análise e Des. de Sistemas', 'eduardo.lima@email.com', '4899995555', 'Rua Principal, 212', '88100-005', 'São José', 'SC', 'Curso de Git', 20),
('Fernanda Martins', '2025006', 'Ciência da Computação', 'fernanda.m@email.com', '48988112233', 'Rua da Praia, 300', '88010-001', 'Florianópolis', 'SC', 'Curso de Java', 60),
('Gustavo Pereira', '2025007', 'Análise e Des. de Sistemas', 'gustavo.p@email.com', '48988223344', 'Alameda dos Anjos, 50', '88100-010', 'São José', 'SC', 'Curso de React', 45),
('Helena Oliveira', '2025008', 'Engenharia de Software', 'helena.o@email.com', '48988334455', 'Rua Sete de Setembro, 707', '88100-020', 'Palhoça', 'SC', 'Workshop de SCRUM', 8),
('Igor Santos', '2025009', 'Análise e Des. de Sistemas', 'igor.s@email.com', '48988445566', 'Avenida das Nações, 1000', '88100-030', 'Florianópolis', 'SC', 'Palestra sobre Docker', 4),
('Juliana Alves', '2025010', 'Ciência da Computação', 'juliana.a@email.com', '48988556677', 'Rua do Sol, 42', '88100-040', 'Biguaçu', 'SC', 'Curso de SQL Avançado', 30),
('Lucas Ferreira', '2025011', 'Análise e Des. de Sistemas', 'lucas.f@email.com', '48988667788', 'Travessa da Lua, 12', '88100-050', 'São José', 'SC', 'Workshop de Testes', 12),
('Mariana Rocha', '2025012', 'Sistemas de Informação', 'mariana.r@email.com', '48988778899', 'Rua do Imperador, 1500', '88100-060', 'Florianópolis', 'SC', 'Curso de C#', 50),
('Nelson Andrade', '2025013', 'Análise e Des. de Sistemas', 'nelson.a@email.com', '48988889900', 'Rua XV de Novembro, 15', '88100-070', 'Palhoça', 'SC', 'Palestra de Empreendedorismo', 5),
('Olivia Barros', '2025014', 'Engenharia de Software', 'olivia.b@email.com', '48988990011', 'Rua dos Navegantes, 800', '88100-080', 'São José', 'SC', 'Curso de JavaScript', 40),
('Paulo Vieira', '2025015', 'Análise e Des. de Sistemas', 'paulo.v@email.com', '48991001122', 'Avenida Beira Mar, 2025', '88100-090', 'Florianópolis', 'SC', 'Workshop de Design Patterns', 16),
('Lucas Gomes', '2025016', 'Ciência da Computação', 'lucas.g@email.com', '48991112233', 'Rua do Arvoredo, 33', '88100-100', 'Biguaçu', 'SC', 'Curso de Linux', 25),
('Renata Neves', '2025017', 'Análise e Des. de Sistemas', 'renata.n@email.com', '48991223344', 'Praça da Matriz, 10', '88100-110', 'São José', 'SC', 'Palestra de Segurança', 6),
('Sergio Tavares', '2025018', 'Engenharia de Software', 'sergio.t@email.com', '48991334455', 'Rua do Ouvidor, 99', '88100-120', 'Palhoça', 'SC', 'Curso de Angular', 45),
('Tatiana Ribeiro', '2025019', 'Sistemas de Informação', 'tatiana.r@email.com', '48991445566', 'Avenida Rio Branco, 500', '88100-130', 'Florianópolis', 'SC', 'Curso de Lógica de Programação', 20),
('Lucas Martins', '2025020', 'Análise e Des. de Sistemas', 'lucas.m@email.com', '48991556677', 'Rua Felipe Schmidt, 1200', '88100-140', 'São José', 'SC', 'Workshop de HTML/CSS', 10);