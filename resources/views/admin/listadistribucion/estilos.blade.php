<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<style>
    .card-btns-distribucion {
        background-color: #F0F2FF91;
        height: 300px;
        width: 100%;
        border-radius: 14px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .card-btns-distribucion a {
        width: 225px;
        height: 95px;
        background-color: #fff;
        text-decoration: none !important;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        font-size: 16px;
        color: #2E2E2E;
        border-radius: 15px;
        border: 2px solid purple;
    }

    .card-btns-distribucion a i {
        font-size: 40px;
        color: purple;
    }

    .btn-crear {
        border: 1px solid #306BA9 !important;
        color: #306BA9 !important;
        background-color: #fff;
    }

    .estatus-global-vac {
        padding: 3px 6px;
        border-radius: 100px;
        font-size: 10px;
    }

    .card-body,
    .card.card-body {
        box-shadow: 0px 1px 4px #0000000F;
        border: 1px solid #E5E5E5;
        border-radius: 14px;
    }

    .instrucciones {
        background-color: #5397D5;
        border-radius: 8px;
        color: #fff;
        padding: 20px;
    }

    .form-group label {
        position: absolute;
        font-size: 20px;
        pointer-events: none;
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        margin: auto;
        background-color: #000;
        width: 140px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.2s;
        transition-timing-function: ease-out;
        border-radius: 100px;
    }

    .form-group label i {
        margin-right: 10px;
    }

    .form-group input {
        width: 300px;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #ffffff88;
        outline: none;
        color: #fff;
        font-size: 25px;
        padding: 20px 30px;
        box-sizing: border-box;
        border-radius: 20px;
        transition: 0.25s;
    }

    .form-group input:focus,
    .form-group input:not(:placeholder-shown) {
        border: 1px solid #fff;
    }

    .form-group input:focus+label,
    .form-group input:not(:placeholder-shown)+label {
        transform: translateY(-35px);
    }
</style>
