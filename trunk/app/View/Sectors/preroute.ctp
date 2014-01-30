    <form method='post'>
        <?php
                $hasSector = array();
                foreach ($sectors as $sector) {
                    $k = $sector['Sector']['latitude']."_".$sector['Sector']['longitude'];
                    $v = $sector['Sector']['nome'];
                    $hasSector[$k] = $v;
                
                }
                $origem = '';
                echo $this->Form->input('origem', array('label'=> 'Escolha o local mais próximo: <br>','id'=>'selectStation','name'=>'Origem', 'required'=>'required','empty' => 'Selecione', 'options' => $hasSector));
                
                $destino = '';
                echo $this->Form->input('destino', array('label'=> 'Escolha o setor mais próximo: <br>','id'=>'selectStation','name'=>'Destino', 'onchange' => 'this.form.submit()', 'required'=>'required','empty' => 'Selecione', 'options' => $hasSector));

                ?>
    </form>
