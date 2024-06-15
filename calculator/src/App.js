import {useState} from 'react';
import './App.css';

export default function App(){
  const [input,setInput]=useState('');
  const [result,setResult]=useState('');

  function handleClick(value){
      setInput(input+value);
  }
  function handleClear(){
    setInput('');
    setResult('');
  }
  function handleEqual(){
    try{
      setInput(eval(input));
      setResult(eval(input));
    }
    catch(e){
      setResult('Syntax error')
    }
  }

  return(
    <div className='App'>
      <div className='calculator'>
        <input type='text' readOnly value={result} className='calculator-result'/>
        <input type="text" readOnly value={input} className="calculator-input"/>
        <div className='calculator-buttons'>
            <button onClick={() => handleClick('1')}>1</button>
            <button onClick={() => handleClick('2')}>2</button>
            <button onClick={() => handleClick('3')}>3</button>
            <button onClick={() => handleClick('-')}>-</button>
            <button onClick={() => handleClick('4')}>4</button>
            <button onClick={() => handleClick('5')}>5</button>
            <button onClick={() => handleClick('6')}>6</button>
            <button onClick={() => handleClick('+')}>+</button>
            <button onClick={() => handleClick('7')}>7</button>
            <button onClick={() => handleClick('8')}>8</button>
            <button onClick={() => handleClick('9')}>9</button>
            <button onClick={() => handleClick('*')}>*</button>
            <button onClick={handleClear}>C</button>
            <button onClick={() => handleClick('0')}>0</button>
            <button onClick={() => handleClick('.')}>.</button>
            <button onClick={() => handleClick('/')}>/</button>
            <button onClick={handleEqual}>=</button>
        </div>
      </div>
    </div>
  )
}