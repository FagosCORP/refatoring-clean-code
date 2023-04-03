
<?php class EntityFactore
{
    // validacoes dentro do atributtos em cima das propiedades

    // e andar sobre a classe original
    public function __construct(protected string  $className)
    {
    }

    public function create(object $attributes): object
    {
        // uma classe que reflete a propia classe
        $reflectionClass = new ReflectionClass($this->className);

        // reflexo da classe existente
        $instanciaReflection  = $reflectionClass->newInstance();

        // verifica se tem annotations
        foreach ($attributes as $key => $value) {
            // pegando as propiedades que possuem validacao 
            // criando um reflexo da classe com mais metodos e para testes.
            $reflectionProperty = $reflectionClass->getProperty($key);
            // gerando a instancia do attributo para validacao 
            // se tiver attributos voce passa o valor que eu estou percorrendo do array e o nome da propiedade
            foreach ($reflectionProperty->getAttributes() as $attribute) {

                // ele ja passsa os valores padrao definido como no construtor
                // nas classes de attributos agora ele utiliza tambem 
                // somente a validacao de que?
                // do valor que foi definido
                // agora o valor que eu quero validar estao no create aqui mesmo que recebe os atributtos

                $validateValue =  $attribute->newInstance()->validate($key, $value);
                // mudando o valor da classe reflexiva para ser publica e conseguir setar o valor 
                $reflectionProperty->setAccessible(true);
                $reflectionProperty->setValue($instanciaReflection, $value);
            }
        }

        return $instanciaReflection;
    }
}
