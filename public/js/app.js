new Vue({
    el: '#app',
    data: {
        numero1: 0,
        numero2: 0,
        operacion: 'sumar',
        resultado: null
    },
    methods: {
        calcular() {
            switch (this.operacion) {
                case 'sumar':
                    this.resultado = this.numero1 + this.numero2;
                    break;
                case 'restar':
                    this.resultado = this.numero1 - this.numero2;
                    break;
                case 'multiplicar':
                    this.resultado = this.numero1 * this.numero2;
                    break;
                case 'dividir':
                    if (this.numero2 !== 0) {
                        this.resultado = this.numero1 / this.numero2;
                    } else {
                        this.resultado = 'Error: División por cero';
                    }
                    break;
                default:
                    this.resultado = 'Operación no válida';
            }
        }
    }
});
