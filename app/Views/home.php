<?= $this->extend('layout/theme') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?php echo site_url('/'); ?>assets/plugins/softkeys/softkeys-0.0.1.css">
<style>
  .wrapper {
    position: absolute;
    top: 0;
    left: 0;
    animation: scroll 180s linear infinite;
    background: url("<?php echo site_url('/'); ?>assets/img/background-elements.png");
    background-size: cover;
    color: #eee;
    height: 100vh;
    min-width: 360px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    perspective: 2000px;
    perspective-origin: 50% 50%;
    z-index: 0;
  }

  @keyframes scroll {
    100% {
      background-position: 0px -3000px;
    }
  }

  @media (prefers-reduced-motion) {
    .wrapper {
      animation: scroll 200s linear infinite;
    }
  }

  .cover-container {
    z-index: 10;
  }

  .bg-orange {
    background-color: #d1731a !important;
  }

  /* Form template
______________________________________________________________ */
  .form__group {
    position: relative;
    padding: 15px 0 0;
    margin-top: 10px;
  }

  .form__field {
    font-family: inherit;
    width: 100%;
    border: 0;
    border-bottom: 1px solid #fff;
    outline: 0;
    font-size: 2rem;
    color: #fff !important;
    padding: 7px 0;
    background: transparent !important;
    transition: border-color 0.2s;
  }

  .form__field::placeholder {
    color: transparent;
  }

  .form__field:placeholder-shown~.form__label {
    font-size: 1.1rem;
    cursor: text;
    top: 20px;
  }

  .form__label {
    position: absolute;
    top: 0;
    display: block;
    transition: 0.2s;
    font-size: .9rem;
    color: #fff;
  }

  .form__field:focus~.form__label {
    position: absolute;
    top: 0;
    display: block;
    transition: 0.2s;
    font-size: .9rem;
  }

  .form__field:required,
  .form__field:invalid {
    box-shadow: none;
  }

  .form__label {
    text-align: center !important;
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('title') ?>
<?= $pg_title ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<article class="wrapper">
</article>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div id="logo-header" style="display: none;">
      <img src="<?php echo site_url('/'); ?>assets/img/logo.png" class="img-fluid" width="400" height="auto" alt="Logo">
      <p class="lead fs-5 m-auto lh-sm mt-3" style="max-width:400px;">1ª Mostra Nacional de Experiências da Rede de Laboratórios de Saúde Pública</p>
    </div>
  </header>

  <main class="px-3">

    <div id="start">
      <img src="<?php echo site_url('/'); ?>assets/img/logo.png" class="img-fluid mb-4" alt="Logo">
      <div class="m-auto">
        <p class="lead fs-1 m-auto lh-sm" style="max-width:820px;">1ª Mostra Nacional de Experiências da Rede de Laboratórios de Saúde Pública</p>
        <p class="lead mt-5">
          <a href="#" class="btn btn-lg btn-secondary fw-bold border-white text-white bg-orange p-4">CREDENCIAMENTO</a>
        </p>
        <P><small>Clique para iniciar o credenciamento</small></P>
      </div>
    </div>

    <div id="login" style="display: none;">
      <div class="container">



        <form id="ewm-form-login">
          <div class="row" style="height: 450px; background-color: rgba(0,0,0,.2)">


            <div class="col-6 h-100 d-inline-block d-flex justify-content-center align-items-center">
              <div class="col-6 form__group field m-auto">
                <input type="text" class="form-control form__field" id="cpf" name="cpf" class="cpf" maxlength="11" autocomplete="off" autofocus />
                <label for="cpf" class="form__label">informe o número do cpf</label>
              </div>
            </div>

            <div class="col-6 h-100 d-inline-block d-flex justify-content-center align-items-center">

              <div class="row">
                <div class="col col-7">
                  <div class="softkeys" data-target="input[name='cpf']"></div>
                </div>
                <div class="col col-5">
                  <div class="softkeys-tool" data-target="input[name='code']"></div>
                  <button type="button" name="button" class="btn-laranja" id="btn-continuar">CONFIRMAR</button>
                </div>
              </div>

            </div>


          </div>
        </form>

      </div>
    </div>

  </main>



  <footer class="mt-auto text-white-50">
    <p>
      <img src="<?php echo site_url('/'); ?>assets/img/assinatura.png" class="img-fluid" alt="Organização">
    </p>
  </footer>
</div>
<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script src="<?php echo site_url('/'); ?>assets/plugins/softkeys/softkeys-0.0.1.js"></script>
<script>
  $(document).ready(() => {



    $('.softkeys').softkeys({
      target: $('.softkeys').data('target'),
      layout: [
        [
          ['7', '&amp;'],
          ['8', '*'],
          ['9', '(']
        ],
        [
          ['4', '$'],
          ['5', '%'],
          ['6', '^']
        ],
        [
          ['1', '!'],
          ['2', '@'],
          ['3', '#']
        ],
        [
          ['0', ')']
        ]
      ]
    });
    $('.softkeys-tool').softkeys({
      target: $('.softkeys').data('target'),
      layout: [

        [
          'delete',
          'clear'
        ]
      ]
    });








    $(".btn-secondary").click(() => {
      console.log('clicj');
      $("#start").fadeOut(400);
      $("#login").delay(400).fadeIn(400);
      $("#logo-header").delay(400).fadeIn(400);
    });
  });
</script>
<?= $this->endSection() ?>