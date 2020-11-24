package com.testevscode.demo.service;

import java.util.List;

import com.testevscode.demo.model.Pessoa;
import com.testevscode.demo.repository.PessoaRepository;

import org.springframework.stereotype.Service;

import lombok.AllArgsConstructor;

@Service
@AllArgsConstructor
public class PessoaService {
    
    private PessoaRepository pessoaRepository;

    public List<Pessoa> findAll(){
        int x = 10;
        int y = 20;

        imprimir(x, y);
        
        return pessoaRepository.findAll();
    }

    public Pessoa save(Pessoa pessoa){
        return pessoaRepository.save(pessoa);
    }

    public void imprimir(int x,int y){
        System.out.print(x + y);
    }
    
}
