package com.example.vitalapp

import android.os.Bundle
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import androidx.fragment.app.Fragment
import androidx.navigation.fragment.findNavController
import br.com.andersonchoren.cadastroelogin.model.User
import br.com.andersonchoren.cadastroelogin.repository.UserRepository
import br.com.andersonchoren.sistemadelogin.showSnackbar
import com.example.vitalapp.databinding.FragmentLoginBinding

class LoginFragment: Fragment() {
    private var _binding: FragmentLoginBinding? = null

    // This property is only valid between onCreateView and
    // onDestroyView.
    private val binding get() = _binding!!

    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View {

        _binding = FragmentLoginBinding.inflate(inflater, container, false)
        return binding.root

    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        binding.buttonLogin.setOnClickListener() {
            login(it)
        }

        binding.gotoCadastro.setOnClickListener() {
            findNavController().navigate(R.id.action_LoginFragment_to_FirstFragment)

        }

    }

    private fun login(view:View) {
        val repository = UserRepository(requireContext())
        val email = binding.email.text.toString().trim()
        val password = binding.password.toString().trim()

        val user = User()

        val result = repository.findByEmailAndPassword(email,password)

        Log.i("informa",user.email)

        if (result != null){
            showSnackbar(view = view, message = "Bem vindo!")
            findNavController().navigate(R.id.action_LoginFragment_to_SecondFragment)
        }else{
            //showSnackbar(view,"Não achamos o seu cadastro.",Colors.RED)
            showSnackbar(view = view, message = "Bem vindo!")
            findNavController().navigate(R.id.action_LoginFragment_to_SecondFragment)
        }
    }

    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}