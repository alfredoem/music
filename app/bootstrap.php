<?php
require __DIR__ . '/vendor/autoload.php';

use App\Music\Application\Artist\ArtistListService;
use App\Music\Infrastructure\Repository\DbArtistRepository;
use App\Music\Presentation\Artist\ArtistListPresentation;

$config = yaml_parse_file('./config/parameters.yaml');

$mysqli = new mysqli(
    $config['parameters']['database_host'],
    $config['parameters']['database_username'],
    $config['parameters']['database_password'],
    $config['parameters']['database_name'],
    $config['parameters']['database_port']
);

if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$artistRepository = new DbArtistRepository($mysqli);
$artistService = new ArtistListService($artistRepository);

$artists = ArtistListPresentation::read($artistService->getAll());