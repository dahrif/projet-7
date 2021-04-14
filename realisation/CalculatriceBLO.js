// Métier
class CalculatriceBLO {

    // Private attributes
    #_x;
    #_y;
    #_solution;
    #_operation;

    // Setters and getters
    get x() {
      return this.#_x  
    }
    set x(value){
        this.#_x = value;
    }
    get y() {
        return this.#_y 
    }
    set y(value){
          this.#_y = value;
    }

    get operation() {
        return this.#_operation
    }
    set operation(value){
          this.#_operation = value;
    }

    get solution() {
        return this.#_solution
    }
    set solution(value){
          this.#_solution = value;
    }

    Calculer(){
        this.#_solution = undefined;
        switch (this.#_operation) {
            case '+':
                this.#_solution = this.#_x + this.#_y;
                break;
            case '-':
                this. #_solution = this.#_x- this.#_y;
                    break;
            case '*':
                this. #_solution = this.#_x* this.#_y;
                    break;
            case '/':
                this. #_solution = this.#_x/ this.#_y;
                    break;
            default:
                break;
        }
        return this.#_solution;
    }

    Init(){
        this.#_x = undefined;
        this.#_y = undefined;
        this.#_operation = undefined;
    }

  }