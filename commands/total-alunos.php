<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$classeAluno = Aluno::class;
$dql = "SELECT count(a) FROM $classeAluno a";
$query = $entityManager->createQuery($dql);
/** @var Aluno[] $alunos */
$totalAlunos = $query->getSingleScalarResult();

echo "total de alunos: ".$totalAlunos;