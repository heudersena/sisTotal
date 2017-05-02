<div class="container" id="containerprincipal">
    <!-- começando a usar  o javaScript do bootstrap -->
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        CADASTRAR UMA CATEGORIA
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <div class="container">
                        <form action="crud/_categoria_insert.php" method="post">
                            <div class="form-group"  id="form-group" >
                                <div class="row">
                                    <div class="col-md-7">
                                        <span>CATEGORIA: </span><input type="text" name="ca_categoria" class="form-control" placeholder="Cadastre uma categoria" required="" autocomplete="off" id="inp-ca_categoria">
                                    </div>
                                    <div class="col-md-5">
                                        <button name="btnCategoria" type="submit" class="btn btn-primary" id="but-btnCategoria">PUBLICAR</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php 
                    require_once('../configuracao/bd.php');
                    $conn = $conn;
                    $sql  = "SELECT * FROM categoria";
                    $stmt = $conn->prepare($sql)  ;
                    $stmt->execute();
                    ?> 
                    <table class="table table-bordered table-condensed">                      
                       <thead>
                        <tr class="tr-categoria">
                            <td>#</td>
                            <td>Categoria</td>
                            <td>Ações</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($stmt as $dados): ?>
                            <tr>
                                <td><?php echo $dados['ca_id']; ?></td>
                                <td><?php echo $dados['ca_categoria'];?></td>
                                <td>
                                    <a href="crud/_categoria_atualizar.php?ca_id=<?php echo $dados['ca_id']; ?>">Atualizar</a> | 
                                    <a href="crud/_categoria_detele.php?ca_id=<?php echo $dados['ca_id']; ?>">Deletar</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>

                </table> 
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    CADASTAR LINKS UTEIS
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <form action="crud/_link_insert.php" method="post">
                    <div class="row">
                     <div class="col-md-3">
                         <p><span>Link:</span><input type="text" name="li_link" id="" class="form-control" placeholder="http://www.google.com"></p>
                     </div>   
                     <div class="col-md-3">
                        <p><span>Descrição:</span><input type="text" name="li_descricao" id="" class="form-control"></p>
                    </div> 
                    <div class="col-md-3">
                        <p><span>Categoria</span>

                            <select name="fk_ca_categoria" id=""  class="form-control">
                                <option value="0">SELECIONE UMA CATEGORIA</option>
                                <?php 
                                $conn = $conn;
                                $sql  = "SELECT * FROM categoria";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                foreach ($stmt as $valor): 
                                    ?>
                                <option value="<?php echo $valor['ca_id']; ?>"><?php echo $valor['ca_categoria']; ?></option>
                                <?php 
                                endforeach; 
                                ?>
                            </select>

                        </p>
                    </div>   
                    <div class="col-md-3">
                     <button class="btn btn-primary" name="btnLink" type="submit" id="btn-link">Publicar link</button>
                 </div>  
                 <?php  ?> 
                 <table class="table table-bordered table-condensed">
                    <thead>
                        <tr class="tr-categoria">
                            <td>Link</td>
                            <td>Descrição</td>
                            <td>Data</td>
                        </tr>
                    </thead>
                    <tbody>
                     <?php 
                     $conn = $conn;
                     $sql  = "SELECT * FROM link";
                     $stmt = $conn->prepare($sql);
                     $stmt->execute();
                     foreach ($stmt as $link): 
                        ?>
                    <tr>
                     <td><a href="<?php echo $link['li_link']; ?>" target="_black">ver</a></td>
                     <td><?php echo $link['li_descricao']; ?></td>
                     <td><?php echo date("d/m/Y H:m:s"); ?></td>
                 </tr>
             <?php endforeach;   ?> 
         </tbody>
     </table>
 </div>
</form>
</div>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
            </a>
        </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>
</div>	

</div>