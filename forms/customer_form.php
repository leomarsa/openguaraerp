<fieldset>
    <div class="form-group">
        <label for="f_name">Nome *</label>
          <input type="text" name="f_name" value="<?php echo $edit ? $customer['f_name'] : ''; ?>" placeholder="Nome" class="form-control" required="required" id = "f_name" >
    </div> 

    <div class="form-group">
        <label for="l_name">Sobrenome *</label>
        <input type="text" name="l_name" value="<?php echo $edit ? $customer['l_name'] : ''; ?>" placeholder="Sobrenome" class="form-control" required="required" id="l_name">
    </div> 

    <div class="form-group">
        <label>Genero * </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Masculino" <?php echo ($edit &&$customer['gender'] =='Masculino') ? "checked": "" ; ?> required="required"/> Masculino
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Feminino" <?php echo ($edit && $customer['gender'] =='Feminino')? "checked": "" ; ?> required="required" id="Feminino"/> Feminino
        </label>
    </div>

    <div class="form-group">
        <label for="address">Endereço</label>
          <textarea name="address" placeholder="Adereço" class="form-control" id="address"><?php echo ($edit)? $customer['address'] : ''; ?></textarea>
    </div> 
    
    <div class="form-group">
        <label>Estado </label>
           <?php $opt_arr = array("Acre", "Alagoas","Amapá","Amazonas","Bahia","Ceará","Distrito Federal","Espírito Santo","Goiás","Maranhão","Mato Grosso"," Mato Grosso do Sul","Minas Gerais","Pará","Paraíba","Paraná","Pernambuco","Piauí","Rio de Janeiro","Rio Grande do Norte"," Rio Grande do Sul","Rondônia","Roraima","Santa Catarina","São Paulo","Sergipe","Tocantins"); 
                            ?>
            <select name="state" class="form-control selectpicker" required>
                <option value=" " >Seleciono o seu Estado</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt == $customer['state']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div>  
    <div class="form-group">
        <label for="email">Email</label>
            <input  type="email" name="email" value="<?php echo $edit ? $customer['email'] : ''; ?>" placeholder="E-Mail" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="phone">Telefone</label>
            <input name="phone" value="<?php echo $edit ? $customer['phone'] : ''; ?>" placeholder="00 9 9999-9999" class="form-control"  type="text" id="phone">
    </div> 

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input name="date_of_birth" value="<?php echo $edit ? $customer['date_of_birth'] : ''; ?>"  placeholder="Birth date" class="form-control"  type="date">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Savar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>