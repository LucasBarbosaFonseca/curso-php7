<pre>

    <?php

        require_once 'ClassPessoa.php';
        require_once 'ClassAluno.php';
        require_once 'ClassProfessor.php';
        require_once 'ClassFuncionario.php';

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudio");
        $p4->setNome("Fabiana");

        $p2->setMatricula(1);
        $p2->setCurso("Informática");
        $p3->setEspec("Desenvolvimento Web");
        $p3->setSalario(10000);
        $p4->setSetor("T.I");

        $p1->setIdade(18);
        $p1->setSexo("M");

        $p2->setIdade(16);
        $p2->setSexo("F");

        $p3->setIdade(28);
        $p3->setSexo("M");

        $p4->setIdade(37);
        $p4->setSexo("F");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

    ?>

</pre>