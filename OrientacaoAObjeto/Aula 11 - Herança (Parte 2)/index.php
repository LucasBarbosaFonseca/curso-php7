<pre>

    <?php

        require_once 'ClassProfessor.php';
        require_once 'ClassAluno.php';
        require_once 'ClassBolsista.php';
        require_once 'ClassTecnico.php';

        $p1 = new Professor();

        $p1->setEspecialidade("Desenvolvimento Web");
        $p1->setSalario(5000);
        $p1->setNome("Robson");
        $p1->setIdade(30);
        $p1->setSexo("M");
        $p1->receberAumento(1000);
        print_r($p1);

        echo "<br>";

        $a1 = new Aluno();

        $a1->setNome("Pedro");
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();
        print_r($a1);

        echo "<br>";

        $b1 = new Bolsista();

        $b1->setMatricula(112);
        $b1->setNome("Jubileu");
        $b1->setIdade(27);
        $b1->setSexo("M");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->pagarMensalidade();
        $b1->renovarBolsa();
        print_r($b1);

        echo "<br>";

        $t1 = new Tecnico();

        $t1->setNome("Carlos");
        $t1->setIdade(23);
        $t1->setSexo("M");
        $t1->setMatricula(5555555);
        $t1->setCurso("Sistemas de Informação");
        $t1->setRegProfissional("Desenvolvedor Javascript Júnior");
        $t1->pagarMensalidade();
        $t1->praticar();
        print_r($t1);

    ?>

</pre>