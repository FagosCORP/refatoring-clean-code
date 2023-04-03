

<?php
class VideoConvert
{
    public function add(
        string $name = 'No name',
        string $description = '',
        string $keyValue = '',
        string $keyint,
        string $keystring

    ) {
    }
}


echo '<pre>';
print_r(
    phpinfo()
);
die;
$videoConvert = new VideoConvert();
$videoConvert->add(name: 'Ryan', description: 'teste', keyint: 'teste', keystring: 'teste');

?>