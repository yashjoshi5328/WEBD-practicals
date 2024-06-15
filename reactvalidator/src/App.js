import {useState} from 'react';
import './App.css';

export default function App(){
    const[name,setName]=useState('');
    const[email,setEmail]=useState('');
    const[pwd,setPwd]=useState('');

    const[nameE,setNameE]=useState('');
    const[emailE,setEmailE]=useState('');
    const[pwdE,setPwdE]=useState('');
    const handleSubmit=(e)=>{
      e.preventDefault();
      console.log('hrllo');
      if(name===""){
        setNameE("name empty");
        setName('');
      }
      else if(name.length<6){
        setNameE("name samll");
        setName('');
      }
      else if(!/^[a-zA-Z]+$/.test(name)){
        setNameE('name invalid');
        setName('');
      }
      else{
        setNameE('');
      }

      if(email===""){
        setEmailE("email empty");
        setEmail('');
      }
      else if(email.length<6){
        setEmailE("email samll");
        setEmail('');
      }
      else if(!/^[a-zA-Z-+.%]+@[a-zA-Z.+]+\.[a-z]{2,}$/.test(email)){
        setEmailE('email invalid');
        setEmail('');
      }
      else{
        setEmailE('');
      }

      if(pwd===""){
        setPwdE("pwd empty");
        setPwd('');
      }
      else if(pwd.length<6){
        setPwdE("pwd samll");
        setPwd('');
      }
      else{
        setPwdE('');
      }

    }
    return (
      <div className='form-container'>
        <fieldset>
        <legend>form</legend>
        <form onSubmit={handleSubmit}>
            <p>{nameE}</p>
            <label>Name</label><input type='text' value={name} onChange={(e)=>setName(e.target.value)}></input>
            <br/><br/>
            <p>{emailE}</p>
            <label>Email</label><input type='email' value={email} onChange={(e)=>setEmail(e.target.value)}></input>
            <br/><br/>
            <p>{pwdE}</p>
            <label>Password</label><input type='password' value={pwd} onChange={(e)=>setPwd(e.target.value)}></input>
            <br/><br/>
            <input type='submit'></input>
        </form>
        </fieldset>
      </div>
    );
}