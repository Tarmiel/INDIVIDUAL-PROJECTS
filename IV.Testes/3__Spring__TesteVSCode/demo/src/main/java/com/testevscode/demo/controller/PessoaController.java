package com.testevscode.demo.controller;

import java.util.List;

import com.testevscode.demo.model.Pessoa;
import com.testevscode.demo.service.PessoaService;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import lombok.AllArgsConstructor;

@RestController
@AllArgsConstructor
public class PessoaController {

    private PessoaService pessoaService;

    @GetMapping
    public List<Pessoa> findAll(){
        return pessoaService.findAll();
    }
}
