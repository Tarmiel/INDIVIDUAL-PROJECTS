import React,{Component} from 'react';

class Contador extends Component {

    state = {
        passo:1,
        valor:0
    }

    inc = () => {
        this.setState({
            valor:this.state.valor + this.state.passo
        })
    }
    dec = () =>{
        this.setState({
            valor:this.state.valor - this.state.passo
        })
    }

    render(){
        return(
            <div>
                <h2>COntador</h2>
                <h4>Valor: {this.state.valor}</h4>
                <input type="number" value={this.state.passo} onChange={e=> this.setState({ passo: +e.target.value})} />
                <div>
                    <button onClick={this.inc}>+</button>
                    <button onClick={this.dec}>-</button>
                </div>
            </div>
        )
    }
}
export default Contador