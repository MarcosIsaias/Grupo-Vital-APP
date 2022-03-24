package br.com.andersonchoren.cadastroelogin.repository

import android.content.Context
import br.com.andersonchoren.cadastroelogin.dao.DataBaseHelper
import br.com.andersonchoren.cadastroelogin.dao.UserDao
import br.com.andersonchoren.cadastroelogin.model.User
import com.example.vitalapp.FirstFragment
import com.j256.ormlite.stmt.SelectArg

class UserRepository(context: Context) {
    private val dbHelper = DataBaseHelper(context)
    private val dao = UserDao(dbHelper.connectionSource)

    fun insert(user: User):Int{
        val result = dao.create(user)
        dao.connectionSource.close()
        return result
    }

    fun findByEmailAndPassword(email:String,password:String): User? {
        val queryBuilder = dao.queryBuilder()
        val where = queryBuilder.where()
        val args = SelectArg()
        where.eq("email",email)
        where.and()
        where.eq("password",password)
        val preparedQuery = queryBuilder.prepare()
        val result = dao.query(preparedQuery)
        return result.firstOrNull()
    }
}