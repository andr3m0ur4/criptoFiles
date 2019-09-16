<form action="" enctype="multipart/form-data" method="POST">
<div class="form-row">
    <div class="form_colum">
        <input type="file" name="file" />
    </div>
    <div class="form_colum ml-5">
        <select class="nc_select" name="switch" required>
            <option selected>O que deseja fazer</option>
            <option value="1">Criptografar</option>
            <option value="2">Descriptografar</option>
        </select>
    </div>
    <div class="form-group">
        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome para o arquivo'" placeholder='Nome para o arquivo' required>
        <input class="form-control mt-2" name="key" id="key" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Chave de Segurança'" placeholder='Chave de Segurança' required>
    </div>

    <div class="form_btn">
        <button class="btn_1">Transformar</button>
    </div>
</div>
</form>