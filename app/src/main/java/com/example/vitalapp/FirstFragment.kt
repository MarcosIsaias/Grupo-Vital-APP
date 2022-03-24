package com.example.vitalapp

import android.os.Bundle
import android.provider.CalendarContract
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Toast
import androidx.fragment.app.Fragment
import androidx.navigation.fragment.findNavController
import br.com.andersonchoren.cadastroelogin.model.User
import br.com.andersonchoren.cadastroelogin.repository.UserRepository
import br.com.andersonchoren.sistemadelogin.showSnackbar
import com.example.vitalapp.databinding.FragmentFirstBinding

class FirstFragment : Fragment() {
    private var _binding: FragmentFirstBinding? = null

    // This property is only valid between onCreateView and
    // onDestroyView.
    private val binding get() = _binding!!

    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View? {

        _binding = FragmentFirstBinding.inflate(inflater, container, false)
        return binding.root

    }






    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        binding.buttonCadastro.setOnClickListener(){
            register(it)
        }

    }
    private fun register(view: View) {
        val repository = UserRepository(requireContext())
        val username = binding.username.text.toString().trim()
        val email = binding.email.text.toString().trim()
        val password = binding.password.text.toString().trim()
        val confirmPassword = binding.confirmPassword.text.toString().trim()

        if(password != confirmPassword){
            showSnackbar(view, "As senhas devem ser iguais",Colors.ORANGE)
        }else{
            val user = User()
            user.username = username
            user.email = email
            user.password = password
            if(repository.insert(user)>0){
                    showSnackbar(view,"Usuário cadastrado com sucesso.")
                }else{
                    showSnackbar(view,"Não foi possível cadastrar o usuário.",Colors.RED)
                }
        }
    }


    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}