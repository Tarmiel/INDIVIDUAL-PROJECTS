package com.testevscode.demo.controller;

import java.util.List;

import com.testevscode.demo.model.Pessoa;
import com.testevscode.demo.service.PessoaService;

import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import lombok.AllArgsConstructor;

@RestController
@RequestMapping("pessoas")
// http://localhost:8080/pessoas
@AllArgsConstructor
public class PessoaController {

    private PessoaService pessoaService;

    @GetMapping
    public ResponseEntity<?> findAll(){
        List<Pessoa> pessoas = pessoaService.findAll();
        return ResponseEntity.ok(pessoas);
    }

    @PostMapping
    public ResponseEntity<?> save(@RequestBody Pessoa pessoa){
        Pessoa pessoaAdded = pessoaService.save(pessoa);
        return ResponseEntity.status(HttpStatus.CREATED).body(pessoaAdded);
    }
}
