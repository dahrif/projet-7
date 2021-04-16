// Métier
class CalculatriceBLO {
constructor(x,y,solution,operation){
    this.x=x;
    this.y=y;
    this.solution=solution;
    this.operation=operation;
}


    Calculer(){
        this.solution = undefined;
        switch (this.operation) {
            case '+':
                this.solution = this.x + this.y;
                break;
            case '-':
                this. solution = this.x - this.y;
                    break;
            case '*':
                this. solution = this.x * this.y;
                    break;
            case '/':
                this. solution = this.x / this.y;
                    break;
            default:
                break;
        }
        return this.solution;
    }


    Init(){
        this.x = undefined;
        this.y = undefined;
        this.operation = undefined;
    }

  }