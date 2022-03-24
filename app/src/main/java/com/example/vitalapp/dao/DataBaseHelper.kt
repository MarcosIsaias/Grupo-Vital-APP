package br.com.andersonchoren.cadastroelogin.dao

import android.content.Context
import android.database.sqlite.SQLiteDatabase
import br.com.andersonchoren.cadastroelogin.model.User
import com.example.vitalapp.FirstFragment
import com.j256.ormlite.android.apptools.OrmLiteSqliteOpenHelper
import com.j256.ormlite.support.ConnectionSource
import com.j256.ormlite.table.TableUtils

class DataBaseHelper(context: Context) : OrmLiteSqliteOpenHelper(context, db, null, version) {

    companion object {
        private const val db = "users.db"
        private const val version = 1
    }

    override fun onCreate(database: SQLiteDatabase?, connectionSource: ConnectionSource?) {
        TableUtils.createTable(connectionSource,User::class.java)
    }

    override fun onUpgrade(database: SQLiteDatabase?, connectionSource: ConnectionSource?, oldVersion: Int, newVersion: Int) {}

}